<?php

namespace App\Providers;

use DB;
use Illuminate\Support\ServiceProvider;
use Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        DB::listen(function ($query) {
            $sql = $query->sql;
            $bindings = $query->bindings;
            $time = $query->time;

            if ($this->shouldSkipLogging($sql)) {
                return;
            }

            try {
                $boundSql = $this->formatSqlWithBindings($sql, $bindings);

                // Use stderr channel to display in terminal
                Log::debug('[SQL] ' . $boundSql . ' | ' . $time . 'ms | ' . $query->connectionName);
            } catch (\Exception $e) {
                Log::error('Failed to log SQL query: ' . $e->getMessage());
            }
        });
    }

    private function formatSqlWithBindings(string $sql, array $bindings): string
    {
        if (empty($bindings)) {
            return $sql;
        }

        $boundSql = $sql;

        // Make a copy of the bindings to process
        $processedBindings = [];
        foreach ($bindings as $key => $binding) {
            $processedBindings[$key] = $this->formatBinding($binding);
        }

        // Replace placeholders with bindings
        $position = 0;
        foreach ($processedBindings as $binding) {
            $position = strpos($boundSql, '?', $position);
            if ($position !== false) {
                $boundSql = substr_replace($boundSql, $binding, $position, 1);
                $position += strlen($binding);
            }
        }

        return $boundSql;
    }

    /**
     * Format a binding value for SQL logging
     */
    private function formatBinding($binding): string
    {
        if (is_null($binding)) {
            return 'NULL';
        }

        if (is_bool($binding)) {
            return $binding ? '1' : '0';
        }

        if (is_numeric($binding)) {
            return $binding;
        }

        if ($binding instanceof \DateTime) {
            return "'" . $binding->format('Y-m-d H:i:s') . "'";
        }

        // String values
        return "'" . addslashes($binding) . "'";
    }

    /**
     * Determine if a query should be skipped from logging
     */
    private function shouldSkipLogging(string $sql): bool
    {
        // Comment this out temporarily to see all queries
        /*
        $patterns = [
            '/^select \* from `sessions`/',
        ];
    
        foreach ($patterns as $pattern) {
            if (preg_match($pattern, strtolower($sql))) {
                return true;
            }
        }
        */

        return false; // Log all queries temporarily
    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
