<?php

/* StoryAdminBundle:Story:story.create.html.twig */
class __TwigTemplate_25ad352e487f63507a9b99d3dcf831af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>  
       ";
        // line 4
        echo twig_include($this->env, $context, "StoryAdminBundle:Story:header/story.header-editor.html.twig");
        echo "
    </head>
<body>
";
        // line 7
        echo twig_include($this->env, $context, "StoryAdminBundle:Story:story.nav.html.twig");
        echo "

<div class=\"container\">
<div class=\"starter-template\">
<h2>Create Story</h2>
<a href=\"/symfony/web/app_dev.php/story-admin\">
<img src=\"/symfony/web/bundles/storyadmin/images/back-icon.png\" />
</a>
";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t <div>
        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "storyName"), 'label');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "storyName"), 'errors');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "storyName"), 'widget');
        echo "
    </div>
\t <div>
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'label');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'errors');
        echo "
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'widget');
        echo "
    </div>
    <div>
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
        echo "
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'errors');
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget');
        echo "
    </div>
\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\tCKEDITOR.replace( 'storyName_description', {
\t\t\t\tuiColor: '#1C6BA0'
\t\t\t});
\t\t</script>
\t<br/>
";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div></div>
 ";
        // line 40
        echo twig_include($this->env, $context, "StoryAdminBundle:Story:header/common.footer.html.twig");
        echo "
</body>




</body>
</html>
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
        return array (  102 => 40,  97 => 38,  86 => 30,  82 => 29,  78 => 28,  72 => 25,  68 => 24,  64 => 23,  58 => 20,  54 => 19,  50 => 18,  45 => 16,  41 => 15,  30 => 7,  24 => 4,  19 => 1,);
    }
}
