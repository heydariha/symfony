<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_20ec72c20e22018c92b4e6421bfb94ba17b75681a627b008b254483f5d18155d extends Twig_Template
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
        $__internal_414a32017718139c50ff24a74a845e9b384b28fa682df94bc78665c5915e43be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414a32017718139c50ff24a74a845e9b384b28fa682df94bc78665c5915e43be->enter($__internal_414a32017718139c50ff24a74a845e9b384b28fa682df94bc78665c5915e43be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_10d6ce5ea92f61cc174e30fc2c0e215b1a97cb1dcef86f4d705c9d7cab5b62aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d6ce5ea92f61cc174e30fc2c0e215b1a97cb1dcef86f4d705c9d7cab5b62aa->enter($__internal_10d6ce5ea92f61cc174e30fc2c0e215b1a97cb1dcef86f4d705c9d7cab5b62aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_414a32017718139c50ff24a74a845e9b384b28fa682df94bc78665c5915e43be->leave($__internal_414a32017718139c50ff24a74a845e9b384b28fa682df94bc78665c5915e43be_prof);

        
        $__internal_10d6ce5ea92f61cc174e30fc2c0e215b1a97cb1dcef86f4d705c9d7cab5b62aa->leave($__internal_10d6ce5ea92f61cc174e30fc2c0e215b1a97cb1dcef86f4d705c9d7cab5b62aa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
