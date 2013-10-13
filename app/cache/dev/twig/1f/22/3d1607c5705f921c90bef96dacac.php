<?php

/* StoryAdminBundle:Page:page.update.html.twig */
class __TwigTemplate_1f223d1607c5705f921c90bef96dacac extends Twig_Template
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
     \t ";
        // line 4
        echo twig_include($this->env, $context, "StoryAdminBundle:Story:header/story.header-editor.html.twig");
        echo "
\t</head>
<body>
";
        // line 7
        echo twig_include($this->env, $context, "StoryAdminBundle:Story:story.nav.html.twig");
        echo "
<div class=\"container\">
  <div class=\"starter-template\">
<h2>Page Update</h2>

";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
 <br/>
 \t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\tCKEDITOR.replace( 'storyName_description', {
\t\t\t\tuiColor: '#1C6BA0'
\t});
\t</script>
";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div></div>
</body>";
    }

    public function getTemplateName()
    {
        return "StoryAdminBundle:Page:page.update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  42 => 13,  38 => 12,  30 => 7,  24 => 4,  19 => 1,);
    }
}
