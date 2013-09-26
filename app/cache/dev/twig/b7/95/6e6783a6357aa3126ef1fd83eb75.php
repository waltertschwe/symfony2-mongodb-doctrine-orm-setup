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
\t\t\t\t\$('#example').dataTable( {
\t\t\t\t\t\"sDom\": '<\"top\"i>rt<\"bottom\"flp><\"clear\">'
\t\t\t\t} );
\t\t\t} );
\t\t</script>
      \t
<body>
";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            echo "    <div class=\"flash-notice\">
        <font color=\"red\"> ";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo " </font>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "<h2>Stories</h2><br/>
<h4><a href=\"/symfony/web/app_dev.php/story-admin/create\">Create New Story</a></h4><br/>
";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stories"]) ? $context["stories"] : $this->getContext($context, "stories")));
        foreach ($context['_seq'] as $context["_key"] => $context["story"]) {
            // line 32
            echo "    <a href=\"/symfony/web/app_dev.php/story-admin/update/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "id"), "html", null, true);
            echo "\">
        ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["story"]) ? $context["story"] : $this->getContext($context, "story")), "storyName"), "html", null, true);
            echo "
    </a><br/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['story'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</body>
</html>";
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
        return array (  115 => 6,  110 => 5,  107 => 4,  102 => 36,  93 => 33,  88 => 32,  84 => 31,  80 => 29,  71 => 26,  68 => 25,  64 => 24,  52 => 14,  32 => 12,  27 => 8,  25 => 4,  20 => 1,);
    }
}
