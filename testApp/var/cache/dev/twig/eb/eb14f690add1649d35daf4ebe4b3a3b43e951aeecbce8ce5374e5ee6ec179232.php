<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8abf24a7fd9465cf4596135d5b010e59c3764277ca4bd022e48a982905834aec extends Twig_Template
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
        $__internal_ffdbc44a665e777f394875c77d55a9644c57e4e2a6ca887275d230e826bf188b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffdbc44a665e777f394875c77d55a9644c57e4e2a6ca887275d230e826bf188b->enter($__internal_ffdbc44a665e777f394875c77d55a9644c57e4e2a6ca887275d230e826bf188b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_8e2f6a22923aede5ccf12b84b7e195eb21503425c3665b007cb42a7b4c86bad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2f6a22923aede5ccf12b84b7e195eb21503425c3665b007cb42a7b4c86bad7->enter($__internal_8e2f6a22923aede5ccf12b84b7e195eb21503425c3665b007cb42a7b4c86bad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ffdbc44a665e777f394875c77d55a9644c57e4e2a6ca887275d230e826bf188b->leave($__internal_ffdbc44a665e777f394875c77d55a9644c57e4e2a6ca887275d230e826bf188b_prof);

        
        $__internal_8e2f6a22923aede5ccf12b84b7e195eb21503425c3665b007cb42a7b4c86bad7->leave($__internal_8e2f6a22923aede5ccf12b84b7e195eb21503425c3665b007cb42a7b4c86bad7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
