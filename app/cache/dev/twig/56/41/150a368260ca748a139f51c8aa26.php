<?php

/* StoryAdminBundle:Story:header/common.footer.html.twig */
class __TwigTemplate_5641150a368260ca748a139f51c8aa26 extends Twig_Template
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
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "78c8ddf_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78c8ddf_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78c8ddf_jquery_1.js");
            // line 6
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "78c8ddf_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78c8ddf_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78c8ddf_jquery.dataTables_2.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
            // asset "78c8ddf_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78c8ddf_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78c8ddf_bootstrap.min_3.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "78c8ddf"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78c8ddf") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/78c8ddf.js");
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 8
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
\t\$(document).ready(function() {
\t\t\$('#example').dataTable();
\t} );
</script>";
    }

    public function getTemplateName()
    {
        return "StoryAdminBundle:Story:header/common.footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  23 => 6,  19 => 1,);
    }
}
