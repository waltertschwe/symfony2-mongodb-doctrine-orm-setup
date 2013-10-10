<?php

/* StoryAdminBundle:Story:story.update.html.twig */
class __TwigTemplate_170b6cdcac9d7989109aaea180748ad2 extends Twig_Template
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
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "    <div class=\"flash-notice\">
       <font color=\"red\"> ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo " </font>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo " <div class=\"container\">
  <div class=\"starter-template\">
<h2>Story Update</h2>
<a href=\"/symfony/web/app_dev.php/story-admin\">
<img src=\"/symfony/web/bundles/storyadmin/images/back-icon.png\" />
</a>
<section id=\"forms\">
  <div class=\"page-header\">
";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
 

    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "storyName"), 'row');
        echo " 
\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'row');
        echo "<br/>
\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'row');
        echo " 
\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\tCKEDITOR.replace( 'storyName_description', {
\t\t\t\tuiColor: '#1C6BA0'
\t\t\t});
\t\t</script>
\t
\t<br/>
";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</section>

</div></div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "StoryAdminBundle:Story:story.update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 35,  78 => 27,  74 => 26,  70 => 25,  66 => 24,  60 => 21,  50 => 13,  41 => 10,  38 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
