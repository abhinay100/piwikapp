<?php

/* @CoreAdminHome/_menu.twig */
class __TwigTemplate_4760ba741fed386f8bdef7e45462b62da9dd2dea4191362a2e3cf4a147573e8d extends Twig_Template
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
        $context["corehome"] = $this->loadTemplate("@CoreHome/macros.twig", "@CoreAdminHome/_menu.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["corehome"]->getsidebarMenu((isset($context["adminMenu"]) ? $context["adminMenu"] : $this->getContext($context, "adminMenu")), (isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule")), (isset($context["currentAction"]) ? $context["currentAction"] : $this->getContext($context, "currentAction")));
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
