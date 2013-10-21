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
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "\t<!-- FLASH MESSAGE -->
\t    <div class=\"flash-notice\">
\t\t    <font color=\"red\"> ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo " </font> 
\t    </div>
\t<!-- END FLASH MESSAGE -->
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<div class=\"container\">
  <div class=\"starter-template\">
<h2>Page Update</h2>
<a href=\"/symfony/web/app_dev.php/story-admin/pages/";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["storyId"]) ? $context["storyId"] : $this->getContext($context, "storyId")), "html", null, true);
        echo "\">
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageName"), 'row');
        echo " <br/>
\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageNumber"), 'row');
        echo " <br/>
\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'row');
        echo " <br/>
\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\tCKEDITOR.replace( 'pageName_body', {
\t\t\tuiColor: '#1C6BA0'
\t\t});
\t</script>
\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "choice1"), 'row');
        echo " 
\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "choice2"), 'row');
        echo "
\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "choice3"), 'row');
        echo " 
\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "choice4"), 'row');
        echo "  
";
        // line 36
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
        return array (  105 => 36,  101 => 35,  97 => 34,  93 => 33,  89 => 32,  80 => 26,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  57 => 18,  52 => 15,  42 => 11,  38 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
