<?php

namespace LaravelShopifyPlugin\Http\Middleware;

use Illuminate\Http\Request;
use Closure;
use Shopify\Api;

class ValidateWebhook
{
    public function __construct()
    {

    }

    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}
