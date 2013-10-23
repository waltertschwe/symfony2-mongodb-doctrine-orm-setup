<?php

/* StoryAdminBundle:Story:header/story.header-editor.html.twig */
class __TwigTemplate_b7a22d362eac110dccd15b87ab5ae70c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <meta charset=\"utf-8\">
 ";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo " 

<script src=\"/symfony/web/js/ckeditor/ckeditor.js\"></script>
 
";
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo " \t  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
      <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/css/custom-template.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
      
 ";
    }

    public function getTemplateName()
    {
        return "StoryAdminBundle:Story:header/story.header-editor.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  36 => 3,  33 => 2,  25 => 7,  23 => 2,  20 => 1,);
    }
}
