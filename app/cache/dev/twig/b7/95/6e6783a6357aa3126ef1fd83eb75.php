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
        echo "\t<div class=\"full_width big\">Story Tool Generator</div>
\t<h1>Stories</h1>
\t<p><a href=\"/symfony/web/app_dev.php/story-admin/create\">Create New Story</a></p>
\t<h1>Live Stories</h1>
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
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stories"]) ? $context["stories"] : $this->getContext($context, "stories")));
        foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
            // line 46
            echo "\t\t<tr class=\"odd gradeX\">
\t\t\t<td class=\"center\"><a href=\"/symfony/web/app_dev.php/story-admin/update/";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "storyName"), "html", null, true);
            echo "</a>
    \t\t</td>
\t\t\t<td class=\"center\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "author"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "description"), "html", null, true);
            echo "</td>
\t\t\t<td class=\"center\">
\t\t\t<a href=\"/symfony/web/app_dev.php/story-admin/page/create/";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "\">
\t\t\t<img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/page_icon.png"), "html", null, true);
            echo "\" /></a>&nbsp;
\t\t\t<img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/json.png"), "html", null, true);
            echo "\" />&nbsp;
\t\t\t<!-- <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/callback.jpg"), "html", null, true);
            echo "\" />&nbsp; -->
\t\t\t<img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/storyadmin/images/delete16x16.gif"), "html", null, true);
            echo "\" />&nbsp;
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
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
        return array (  165 => 4,  137 => 56,  129 => 54,  81 => 30,  20 => 1,  76 => 17,  114 => 37,  97 => 36,  65 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 46,  71 => 26,  67 => 24,  63 => 23,  59 => 12,  28 => 8,  87 => 25,  38 => 7,  31 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 43,  136 => 56,  121 => 52,  117 => 44,  105 => 47,  91 => 27,  62 => 17,  49 => 19,  26 => 3,  21 => 2,  25 => 4,  94 => 35,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  24 => 2,  19 => 1,  93 => 28,  88 => 31,  78 => 21,  46 => 9,  44 => 8,  27 => 8,  79 => 27,  72 => 16,  69 => 25,  47 => 9,  40 => 7,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 39,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 45,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 11,  52 => 14,  50 => 10,  43 => 8,  41 => 12,  35 => 6,  32 => 12,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 6,  168 => 5,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 60,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 53,  122 => 43,  116 => 50,  112 => 49,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 30,  82 => 28,  80 => 19,  73 => 19,  64 => 14,  60 => 6,  57 => 14,  54 => 10,  51 => 10,  48 => 8,  45 => 17,  42 => 8,  39 => 7,  36 => 10,  33 => 10,  30 => 3,);
    }
}
