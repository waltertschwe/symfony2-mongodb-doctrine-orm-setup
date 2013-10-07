<?php

/* StoryAdminBundle:Story:story.index.html.twig */
class __TwigTemplate_b7956e6783a6357aa3126ef1fd83eb75 extends Twig_Template
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
\t";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 24
            echo "\t\t<!-- FLASH MESSAGE -->
\t    <div class=\"flash-notice\">
\t       <font color=\"red\"> ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo " </font> 
\t    </div>
\t\t<!-- END FLASH MESSAGE -->
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t<div class=\"full_width big\">Story Tool</div>
\t<h1>Live Stories</h1>
\t<p><a href=\"/symfony/web/app_dev.php/story-admin/create\">Create New Story</a></p>
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
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stories"]) ? $context["stories"] : $this->getContext($context, "stories")));
        foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
            // line 45
            echo "\t\t<tr class=\"odd gradeC\">
\t\t\t<td class=\"center\"><a href=\"/symfony/web/app_dev.php/story-admin/update/";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "storyName"), "html", null, true);
            echo "</a>
    \t\t</td>
\t\t\t<td class=\"center\">";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "author"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "description"), "html", null, true);
            echo "</td>
\t\t\t<td class=\"center\">
\t\t\t<a href=\"/symfony/web/app_dev.php/story-admin/pages/";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "\">
\t\t\t<img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/page_icon.png"), "html", null, true);
            echo "\" /></a>&nbsp;
\t\t\t<img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/json.png"), "html", null, true);
            echo "\" />&nbsp;
\t\t\t<!-- <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/callback.jpg"), "html", null, true);
            echo "\" />&nbsp; -->
\t\t\t<img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/delete16x16.gif"), "html", null, true);
            echo "\" />&nbsp;
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
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
        return "StoryAdminBundle:Story:story.index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 6,  167 => 5,  164 => 4,  146 => 59,  136 => 55,  132 => 54,  128 => 53,  124 => 52,  120 => 51,  115 => 49,  111 => 48,  104 => 46,  101 => 45,  97 => 44,  81 => 30,  71 => 26,  67 => 24,  63 => 23,  52 => 14,  32 => 12,  27 => 8,  25 => 4,  20 => 1,);
    }
}
