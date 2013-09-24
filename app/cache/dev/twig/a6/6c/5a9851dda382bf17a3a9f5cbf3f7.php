<?php

/* StoryAdminBundle:Story:story.delete.html.twig */
class __TwigTemplate_a66c5a9851dda382bf17a3a9f5cbf3f7 extends Twig_Template
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
        echo "Story Delete = ";
        echo twig_escape_filter($this->env, (isset($context["storyId"]) ? $context["storyId"] : $this->getContext($context, "storyId")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "StoryAdminBundle:Story:story.delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
