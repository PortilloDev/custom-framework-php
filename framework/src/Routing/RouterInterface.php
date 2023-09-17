<?php

namespace IvanPortillo\framework\Routing;

use IvanPortillo\framework\Http\Request;

interface RouterInterface
{
    public function dispatch(Request $request);
}