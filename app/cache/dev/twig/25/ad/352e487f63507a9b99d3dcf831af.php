<?php

/* StoryAdminBundle:Story:story.create.html.twig */
class __TwigTemplate_25ad352e487f63507a9b99d3dcf831af extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>  
      <meta charset=\"utf-8\">
      ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bff46d8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bff46d8_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bff46d8_jquery_1.js");
            // line 11
            echo "       <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "bff46d8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bff46d8") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/bff46d8.js");
            echo "       <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 13
        echo "\t\t<script src=\"/symfony/web/js/ckeditor/ckeditor.js\"></script>
\t\t
    </head>
<body>
";
        // line 17
        echo twig_include($this->env, $context, "StoryAdminBundle:Story:story.nav.html.twig");
        echo "
<h2>Create Story</h2>
<a href=\"/symfony/web/app_dev.php/story-admin\">
<img src=\"/symfony/web/bundles/storyadmin/images/back-icon.png\" />
</a>
";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "storyName"), 'row');
        echo " 
\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'row');
        echo "<br/>
\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'row');
        echo " 
\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\tCKEDITOR.replace( 'storyName_description', {
\t\t\t\tuiColor: '#1C6BA0'
\t\t\t});
\t\t</script>
\t<br/>
";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</body>
</html>
";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/css/ckeditor.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
      ";
    }

    public function getTemplateName()
    {
        return "StoryAdminBundle:Story:story.create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 6,  96 => 5,  87 => 33,  77 => 26,  73 => 25,  69 => 24,  65 => 23,  61 => 22,  53 => 17,  47 => 13,  33 => 11,  28 => 8,  26 => 5,  20 => 1,);
    }
}
