<?php

/* modules/nys_unav/templates/nys-unav-footer-interactive.html.twig */
class __TwigTemplate_bce72518a4960006ac71f74c7d29d9538711c5ff5c885bf22e687f46b32d545a extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<!-- uNav interactive footer -->
<div id=\"nygov-universal-footer\">
    <noscript>
        <iframe width=\"100%\" height=\"200px\" src=\"//static-assets.ny.gov/load_global_footer/ajax?iframe=true\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:100%; height:200px;\" scrolling=\"no\">
            Your browser does not support iFrames
        </iframe>
    </noscript>
</div>
<!-- end uNav interactive footer -->";
    }

    public function getTemplateName()
    {
        return "modules/nys_unav/templates/nys-unav-footer-interactive.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <!-- uNav interactive footer -->*/
/* <div id="nygov-universal-footer">*/
/*     <noscript>*/
/*         <iframe width="100%" height="200px" src="//static-assets.ny.gov/load_global_footer/ajax?iframe=true" frameborder="0" style="border:none; overflow:hidden; width:100%; height:200px;" scrolling="no">*/
/*             Your browser does not support iFrames*/
/*         </iframe>*/
/*     </noscript>*/
/* </div>*/
/* <!-- end uNav interactive footer -->*/
