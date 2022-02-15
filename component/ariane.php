<?php
 

class BreadcrumbGenerator{
    protected string $output;

    public __construct(
        protected string $base,
        protected string $separator,
    )
    {}
}

$generator = new BreadcrumbGenerator($server_url, '-');

?>