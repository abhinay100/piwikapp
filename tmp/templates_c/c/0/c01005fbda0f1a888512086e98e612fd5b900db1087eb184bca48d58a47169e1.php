<?php

/* @CoreHome/_userMenu.twig */
class __TwigTemplate_c01005fbda0f1a888512086e98e612fd5b900db1087eb184bca48d58a47169e1 extends Twig_Template
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
        $context["corehome"] = $this->loadTemplate("@CoreHome/macros.twig", "@CoreHome/_userMenu.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["corehome"]->getsidebarMenu((isset($context["userMenu"]) ? $context["userMenu"] : $this->getContext($context, "userMenu")), (isset($context["currentModule"]) ? $context["currentModule"] : $this->getContext($context, "currentModule")), (isset($context["currentAction"]) ? $context["currentAction"] : $this->getContext($context, "currentAction")));
    }

    public function getTemplateName()
    {
        return "@CoreHome/_userMenu.twig";
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
