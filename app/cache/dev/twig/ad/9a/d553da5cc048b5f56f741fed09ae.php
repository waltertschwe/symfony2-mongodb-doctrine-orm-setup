<?php

/* StoryAdminBundle:Page:page.index.html.twig */
class __TwigTemplate_ad9ad553da5cc048b5f56f741fed09ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c4adca3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c4adca3_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c4adca3_jquery_1.js");
            // line 12
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
            // asset "c4adca3_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c4adca3_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c4adca3_jquery.dataTables_2.js");
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        } else {
            // asset "c4adca3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c4adca3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/c4adca3.js");
            echo "    \t\t<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
\t\t";
        }
        unset($context["asset_url"]);
        // line 14
        echo "\t\t
\t\t<script type=\"text/javascript\" charset=\"utf-8\">
\t\t\t\$(document).ready(function() {
\t\t\t\t\$('#example').dataTable();
\t\t\t} );
\t\t</script>

<body id=\"dt_example\">
<div id=\"container\">
<div class=\"full_width big\">Story Tool Generator</div>
\t<h1>Pages</h1>
\t<p><a href=\"/symfony/web/app_dev.php/story-admin/page/create/";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
        echo "/ ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "newPageNumber"), "html", null, true);
        echo "\">Create New Page</a></p>
<div id=\"demo\">
<table cellpadding=\"0\" cellspacing=\"0\" border=\"0\" class=\"display\" id=\"example\" width=\"100%\">
\t<thead>
\t\t<tr>
\t\t\t<th>Page Number</th>
\t\t\t<th>Page Name</th>
\t\t\t<th>Body</th>
\t\t\t<th>Decision</th>
\t\t</tr>
\t</thead>
\t<tbody>
";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "pages"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 38
            echo "<tr class=\"odd gradeZ\">
\t<td class=\"center\">
\t\t<a href=\"/symfony/web/app_dev.php/story-admin/page/update/";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "pageNumber"), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "pageNumber"), "html", null, true);
            echo "</a>
\t</td>
\t<td class=\"center\">
\t\t<a href=\"/symfony/web/app_dev.php/story-admin/page/update/";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "pageNumber"), "html", null, true);
            echo "\">
\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "pageName"), "html", null, true);
            echo " 
\t\t</a>\t\t
\t</td>
\t<td class=\"center\">";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "body"), "html", null, true);
            echo " </td>
\t<td class=\"center\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "decision"), "html", null, true);
            echo " </td>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</tbody>
\t<tfoot>
\t\t<tr>
\t\t\t<th>Page Number</th>
\t\t\t<th>Page Name</th>
\t\t\t<th>Body</th>
\t\t\t<th>Decision</th>
\t\t</tr>
\t</tfoot>
</table>
</div>
</div>
</body>
</html>




";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/css/demo_page.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/css/demo_table.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
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
        return array (  154 => 6,  149 => 5,  146 => 4,  124 => 50,  116 => 48,  112 => 47,  106 => 44,  100 => 43,  90 => 40,  86 => 38,  82 => 37,  65 => 25,  52 => 14,  32 => 12,  27 => 8,  25 => 4,  20 => 1,);
    }
}
