<?php

/* StoryAdminBundle:Story:header/story.header.html.twig */
class __TwigTemplate_5bb87da2dbe815e07562a1b91e9e87cf extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "
";
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/css/custom-template.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/css/demo_table.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    public function getTemplateName()
    {
        return "StoryAdminBundle:Story:header/story.header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  38 => 4,  33 => 3,  30 => 2,  25 => 7,  23 => 2,  20 => 1,);
    }
}
