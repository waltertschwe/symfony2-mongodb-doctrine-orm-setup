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
        echo "Story Update. id = ";
        echo twig_escape_filter($this->env, (isset($context["storyId"]) ? $context["storyId"] : $this->getContext($context, "storyId")), "html", null, true);
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
        return array (  19 => 1,);
    }
}
