<?php

/* StoryAdminBundle:Page:page.create.html.twig */
class __TwigTemplate_fad82a58ee39ca5d26ced0ab4cd68bf5 extends Twig_Template
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
<h2>Create Page</h2>
<a href=\"/symfony/web/app_dev.php/story-admin/pages/";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "storyId"), "html", null, true);
        echo "\">
<img src=\"/symfony/web/bundles/storyadmin/images/back-icon.png\" />
</a>
";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageName"), 'row');
        echo " <br/>
\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pageNumber"), 'row');
        echo " <br/>
\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body"), 'row');
        echo " <br/>
\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\tCKEDITOR.replace( 'pageName_body', {
\t\t\tuiColor: '#1C6BA0'
\t\t});
\t</script>
\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "choice1"), 'row');
        echo " 
\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "choice2"), 'row');
        echo "
\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "choice3"), 'row');
        echo " 
\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "choice4"), 'row');
        echo "  
";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div></div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "StoryAdminBundle:Page:page.create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  37 => 11,  30 => 7,  24 => 4,  19 => 1,);
    }
}
