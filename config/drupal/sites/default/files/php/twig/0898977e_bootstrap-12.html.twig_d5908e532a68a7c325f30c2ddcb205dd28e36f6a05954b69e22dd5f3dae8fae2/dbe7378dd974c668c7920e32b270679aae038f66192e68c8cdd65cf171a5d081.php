<?php

/* modules/contrib/bootstrap_layouts/templates/one-column/bootstrap-12/bootstrap-12.html.twig */
class __TwigTemplate_b78f3525371a4771cd3821732aa17c0f65e72b9be1e890a0787ee7fe274b6cfa extends Twig_Template
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
        $tags = array("if" => 2);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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
        echo "<div class=\"row\">
  ";
        // line 2
        if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "main", array())) {
            // line 3
            echo "  <div class=\"col-sm-12\">
    ";
            // line 4
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "main", array()), "html", null, true));
            echo "
  </div>
  ";
        }
        // line 7
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/bootstrap_layouts/templates/one-column/bootstrap-12/bootstrap-12.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }
}
/* <div class="row">*/
/*   {% if content.main %}*/
/*   <div class="col-sm-12">*/
/*     {{ content.main }}*/
/*   </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
