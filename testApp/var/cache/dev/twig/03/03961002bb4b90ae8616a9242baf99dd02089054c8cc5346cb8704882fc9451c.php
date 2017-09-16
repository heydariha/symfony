<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1761c6332f72f565103e18d5c150091532ed6585b7e1f579c0af27fdb290b664 extends Twig_Template
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
        $__internal_39486bf0219687259946e24692847176fa906c4ea411dde13adf49451da02210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39486bf0219687259946e24692847176fa906c4ea411dde13adf49451da02210->enter($__internal_39486bf0219687259946e24692847176fa906c4ea411dde13adf49451da02210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_35ac64bf6c84f01b06c84ecf844f713ce84e8bb33e35384dcb9191deb2a3625f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ac64bf6c84f01b06c84ecf844f713ce84e8bb33e35384dcb9191deb2a3625f->enter($__internal_35ac64bf6c84f01b06c84ecf844f713ce84e8bb33e35384dcb9191deb2a3625f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_39486bf0219687259946e24692847176fa906c4ea411dde13adf49451da02210->leave($__internal_39486bf0219687259946e24692847176fa906c4ea411dde13adf49451da02210_prof);

        
        $__internal_35ac64bf6c84f01b06c84ecf844f713ce84e8bb33e35384dcb9191deb2a3625f->leave($__internal_35ac64bf6c84f01b06c84ecf844f713ce84e8bb33e35384dcb9191deb2a3625f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
