<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ef1eab20373bc4335e8e7e0d725fb63206f6cf7b351e7b56416436a02b151b56 extends Twig_Template
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
        $__internal_a6c2cb346c222602eadb48e5055ea8e78f574c8770a68879b191035508ed38ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c2cb346c222602eadb48e5055ea8e78f574c8770a68879b191035508ed38ef->enter($__internal_a6c2cb346c222602eadb48e5055ea8e78f574c8770a68879b191035508ed38ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_bb1c43efb486c2d372f7193efc53879983eddad84f5ea4d143804c95592d1885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1c43efb486c2d372f7193efc53879983eddad84f5ea4d143804c95592d1885->enter($__internal_bb1c43efb486c2d372f7193efc53879983eddad84f5ea4d143804c95592d1885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a6c2cb346c222602eadb48e5055ea8e78f574c8770a68879b191035508ed38ef->leave($__internal_a6c2cb346c222602eadb48e5055ea8e78f574c8770a68879b191035508ed38ef_prof);

        
        $__internal_bb1c43efb486c2d372f7193efc53879983eddad84f5ea4d143804c95592d1885->leave($__internal_bb1c43efb486c2d372f7193efc53879983eddad84f5ea4d143804c95592d1885_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
