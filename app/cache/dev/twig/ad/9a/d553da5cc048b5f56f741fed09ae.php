<?php

/* StoryAdminBundle:Page:page.index.html.twig */
class __TwigTemplate_ad9ad553da5cc048b5f56f741fed09ae extends Twig_Template
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
\t\t ";
        // line 4
        echo twig_include($this->env, $context, "StoryAdminBundle:Story:header/story.header.html.twig");
        echo "
\t</head>
<body id=\"dt_example\">
";
        // line 7
        echo twig_include($this->env, $context, "StoryAdminBundle:Story:story.nav.html.twig");
        echo "
<div class=\"container\">
<div class=\"starter-template\">
<div class=\"full_width big\"><a href=\"../../story-admin\">CREATIVE STORYTELLING TOOL</a></div>
\t<h1><font color=\"red\"> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "storyName"), "html", null, true);
        echo "</font> - Pages</h1>
\t<div id=\"demo\">
<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">
\t<thead>
\t\t<tr>
\t\t\t<th style=\"text-align: center\">Page Number</th>
\t\t\t<th style=\"text-align: center\">Page Name</th>
\t\t\t<th style=\"text-align: center\">Body</th>
\t\t\t<th style=\"text-align: center\">Decision</th>
\t\t\t<th style=\"text-align: center\">Actions</th>
\t\t</tr>
\t</thead>
\t<tbody>
";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "pages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 25
            echo "<tr class=\"odd gradeA\">
\t<td class=\"center\">
\t\t<a href=\"/symfony/web/app_dev.php/story-admin/page/update/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "pageNumber"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "pageNumber"), "html", null, true);
            echo "</a>
\t</td>
\t<td class=\"center\">
\t\t<a href=\"/symfony/web/app_dev.php/story-admin/page/update/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "pageNumber"), "html", null, true);
            echo "\">
\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "pageName"), "html", null, true);
            echo " 
\t\t</a>\t\t
\t</td>
\t<td class=\"center\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "body"), "html", null, true);
            echo " </td>
\t<td class=\"center\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "decision"), "html", null, true);
            echo " </td>
\t<td class=\"center\">
\t<a href=\"/symfony/web/app_dev.php/story-admin/pages/";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "\">
\t<img src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/page_icon.png"), "html", null, true);
            echo "\" /></a>&nbsp;
\t<img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/json.png"), "html", null, true);
            echo "\" />&nbsp;
\t<!-- <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/callback.jpg"), "html", null, true);
            echo "\" />&nbsp; -->
\t<a href=\"/symfony/web/app_dev.php/story-admin/delete/";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/delete16x16.gif"), "html", null, true);
            echo "\" /></a>&nbsp;
\t</td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<th>Page Number</th>
\t\t\t<th>Page Name</th>
\t\t\t<th>Body</th>
\t\t\t<th>Decision</th>
\t\t\t<th>Actions</th>
\t\t</tr>
\t</tfoot>
</table></div>
</div>
</div>
</body>
</html>




";
    }

    public function getTemplateName()
    {
        return "StoryAdminBundle:Page:page.index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 44,  108 => 41,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  87 => 35,  83 => 34,  77 => 31,  71 => 30,  61 => 27,  57 => 25,  53 => 24,  37 => 11,  30 => 7,  24 => 4,  19 => 1,);
    }
}
