<?php

namespace FOA\XmlExportConnectorBundle\Twig;

class TemplateRenderer
{
    public $kernelRootDir;

    /**
     * @param $kernelRootDir
     */
    public function __construct($kernelRootDir)
    {
        $this->kernelRootDir = $kernelRootDir;
    }

    /**
     * @param $template
     * @param $parameters
     * @return mixed
     */
    public function renderTemplate($template, $parameters)
    {
        $templatesDir = sprintf('%s%s', $this->kernelRootDir, '/Resources/views/XMLTemplates');
        $loader = new \Twig_Loader_Filesystem($templatesDir);
        $twig   = new \Twig_Environment($loader);

        return $twig->render($template, ['params' => $parameters]);
    }
}
