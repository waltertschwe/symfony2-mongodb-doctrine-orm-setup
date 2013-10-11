<?php

/* StoryAdminBundle:Story:story.index.html.twig */
class __TwigTemplate_b7956e6783a6357aa3126ef1fd83eb75 extends Twig_Template
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
        echo twig_include($this->env, $context, "StoryAdminBundle:Story:header/story.header.html.twig");
        echo "
\t</head>
<body id=\"dt_example\">
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
        echo "\t<!--
\t<h3>Live Stories</h3>
\t<p><a href=\"/symfony/web/app_dev.php/story-admin/create\">Create New Story</a></p>
\t-->
<div class=\"container\">
<div class=\"starter-template\">
<div id=\"demo\">
<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">
\t<thead>
\t\t<tr>
\t\t\t<th>Story</th>
\t\t\t<th>Author</th>
\t\t\t<th>Description</th>
\t\t\t<th>Actions</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t\t";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stories"]) ? $context["stories"] : $this->getContext($context, "stories")));
        foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
            // line 33
            echo "\t\t<tr class=\"odd gradeC\">
\t\t\t<td class=\"center\"><a href=\"/symfony/web/app_dev.php/story-admin/update/";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "storyName"), "html", null, true);
            echo "</a>
    \t\t</td>
\t\t\t<td class=\"center\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "author"), "html", null, true);
            echo "</td>
\t\t\t<td class=\"center\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "description"), "html", null, true);
            echo "</td>
\t\t\t<td class=\"center\">
\t\t\t<a href=\"/symfony/web/app_dev.php/story-admin/pages/";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "\">
\t\t\t<img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/page_icon.png"), "html", null, true);
            echo "\" /></a>&nbsp;
\t\t\t<img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/json.png"), "html", null, true);
            echo "\" />&nbsp;
\t\t\t<!-- <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/callback.jpg"), "html", null, true);
            echo "\" />&nbsp; -->
\t\t\t<a href=\"/symfony/web/app_dev.php/story-admin/delete/";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/delete16x16.gif"), "html", null, true);
            echo "\" /></a>&nbsp;
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "\t</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<th>Story</th>
\t\t\t<th>Author</th>
\t\t\t<th>Description</th>
\t\t\t<th>Actions</th>
\t\t</tr>
\t</tfoot>
</table>
</div>
</div>

</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "StoryAdminBundle:Story:story.index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 47,  110 => 43,  106 => 42,  102 => 41,  98 => 40,  94 => 39,  89 => 37,  85 => 36,  78 => 34,  75 => 33,  71 => 32,  52 => 15,  42 => 11,  38 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
