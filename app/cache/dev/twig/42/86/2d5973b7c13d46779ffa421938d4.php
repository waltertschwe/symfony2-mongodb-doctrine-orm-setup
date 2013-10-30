<?php

/* StoryViewFrontEndBundle:StoryRouter:pageRouter.html.twig */
class __TwigTemplate_42862d5973b7c13d46779ffa421938d4 extends Twig_Template
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
        echo "

";
        // line 3
        echo $this->getAttribute((isset($context["pageData"]) ? $context["pageData"] : $this->getContext($context, "pageData")), "body");
        echo " 

<br/>


<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageData"]) ? $context["pageData"] : $this->getContext($context, "pageData")), "storyId"), "html", null, true);
        echo "\" method=\"post\">

";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
   <!-- Next Page is a Hidden Value -->
\t<div>
\t\t
\t</div>
";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t
</form>";
    }

    public function getTemplateName()
    {
        return "StoryViewFrontEndBundle:StoryRouter:pageRouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  36 => 10,  31 => 8,  23 => 3,  19 => 1,);
    }
}
