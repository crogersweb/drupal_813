<?php

/* modules/nys_unav/templates/nys-unav-header-interactive.html.twig */
class __TwigTemplate_b6e547cb5c064463b94ba8acdd2615644722a228aec59d767c595b84cacdab75 extends Twig_Template
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
        echo "<div id=\"nygov-universal-navigation\" class=\"nygov-universal-container\" data-iframe=\"true\" data-updated=\"2014-11-07 08:30\">
    <noscript>
        <iframe width=\"100%\" height=\"86px\" src=\"//static-assets.ny.gov/load_global_menu/ajax?iframe=true\" frameborder=\"0\" style=\"border:none; overflow:hidden; width:100%; height:86px;\" scrolling=\"no\">
            Your browser does not support iFrames
        </iframe>
    </noscript>
    <script type=\"text/javascript\">
        var _NY = {
            HOST: \"static-assets.ny.gov\",
            BASE_HOST: \"www.ny.gov\",
            hideSettings: false,
            hideSearch: false
        };
        (function (document, bundle, head) {
            head = document.getElementsByTagName('head')[0];
            bundle = document.createElement('script');
            bundle.type = 'text/javascript';
            bundle.async = true;
            bundle.src = \"//static-assets.ny.gov/sites/all/widgets/universal-navigation/js/dist/global-nav-bundle.js\";
            head.appendChild(bundle);
        }(document));
    </script>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/nys_unav/templates/nys-unav-header-interactive.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* <div id="nygov-universal-navigation" class="nygov-universal-container" data-iframe="true" data-updated="2014-11-07 08:30">*/
/*     <noscript>*/
/*         <iframe width="100%" height="86px" src="//static-assets.ny.gov/load_global_menu/ajax?iframe=true" frameborder="0" style="border:none; overflow:hidden; width:100%; height:86px;" scrolling="no">*/
/*             Your browser does not support iFrames*/
/*         </iframe>*/
/*     </noscript>*/
/*     <script type="text/javascript">*/
/*         var _NY = {*/
/*             HOST: "static-assets.ny.gov",*/
/*             BASE_HOST: "www.ny.gov",*/
/*             hideSettings: false,*/
/*             hideSearch: false*/
/*         };*/
/*         (function (document, bundle, head) {*/
/*             head = document.getElementsByTagName('head')[0];*/
/*             bundle = document.createElement('script');*/
/*             bundle.type = 'text/javascript';*/
/*             bundle.async = true;*/
/*             bundle.src = "//static-assets.ny.gov/sites/all/widgets/universal-navigation/js/dist/global-nav-bundle.js";*/
/*             head.appendChild(bundle);*/
/*         }(document));*/
/*     </script>*/
/* </div>*/
