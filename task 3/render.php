<?php
    function renderTemplate(string $path, array $templateData = []): string
    {

        extract($templateData, EXTR_OVERWRITE);

        ob_start();

        include $path;

        return ob_get_clean();
}
