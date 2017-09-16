<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_09f66bc8c257df05b28b019110722ba1ae4f2ea88a4583245711d52719488c38 extends Twig_Template
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
        $__internal_b787e60154f0e9cb0cfd1db4ea034415ac4add5235b5c6a0a12bfd606fff0a2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b787e60154f0e9cb0cfd1db4ea034415ac4add5235b5c6a0a12bfd606fff0a2e->enter($__internal_b787e60154f0e9cb0cfd1db4ea034415ac4add5235b5c6a0a12bfd606fff0a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_5e4f4079da29c67a18e684cca6c1ee2f201e6e106a0c5da0b162b24b82632455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4f4079da29c67a18e684cca6c1ee2f201e6e106a0c5da0b162b24b82632455->enter($__internal_5e4f4079da29c67a18e684cca6c1ee2f201e6e106a0c5da0b162b24b82632455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b787e60154f0e9cb0cfd1db4ea034415ac4add5235b5c6a0a12bfd606fff0a2e->leave($__internal_b787e60154f0e9cb0cfd1db4ea034415ac4add5235b5c6a0a12bfd606fff0a2e_prof);

        
        $__internal_5e4f4079da29c67a18e684cca6c1ee2f201e6e106a0c5da0b162b24b82632455->leave($__internal_5e4f4079da29c67a18e684cca6c1ee2f201e6e106a0c5da0b162b24b82632455_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
