<?php

/* StoryViewFrontEndBundle:StoryRouter:home.html.twig */
class __TwigTemplate_a9750f631e989e337bdaaa664ae505ac extends Twig_Template
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
        echo "<b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageOne"]) ? $context["pageOne"] : $this->getContext($context, "pageOne")), "storyName"), "html", null, true);
        echo "</b>
<br/>

";
        // line 4
        echo $this->getAttribute((isset($context["pageOne"]) ? $context["pageOne"] : $this->getContext($context, "pageOne")), "body");
        echo " 

<br/>
The next page is:

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageOne"]) ? $context["pageOne"] : $this->getContext($context, "pageOne")), "nextPage"), "html", null, true);
        echo "


<form action=\"pages/";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageOne"]) ? $context["pageOne"] : $this->getContext($context, "pageOne")), "storyId"), "html", null, true);
        echo "\" method=\"post\">

";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
   <!-- Next Page is a Hidden Value -->
\t<div>
\t\t
\t</div>
";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
\t
</form>";
    }

    public function getTemplateName()
    {
        return "StoryViewFrontEndBundle:StoryRouter:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  45 => 14,  40 => 12,  34 => 9,  26 => 4,  19 => 1,);
    }
}
