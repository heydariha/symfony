<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_320956a3c8876e0ae5aea8abca1e6ded0343eb39ff2d5228fae9d739e959eec2 extends Twig_Template
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
        $__internal_18831a4bd85463d1115a79bff4d637ac42908dc5ee4580aedb950b251c38f1af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18831a4bd85463d1115a79bff4d637ac42908dc5ee4580aedb950b251c38f1af->enter($__internal_18831a4bd85463d1115a79bff4d637ac42908dc5ee4580aedb950b251c38f1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_cda98aae6fd8d21e19bb1f0ff03ad4456fde34801d516cd70b0763ce6ec3b290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cda98aae6fd8d21e19bb1f0ff03ad4456fde34801d516cd70b0763ce6ec3b290->enter($__internal_cda98aae6fd8d21e19bb1f0ff03ad4456fde34801d516cd70b0763ce6ec3b290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_18831a4bd85463d1115a79bff4d637ac42908dc5ee4580aedb950b251c38f1af->leave($__internal_18831a4bd85463d1115a79bff4d637ac42908dc5ee4580aedb950b251c38f1af_prof);

        
        $__internal_cda98aae6fd8d21e19bb1f0ff03ad4456fde34801d516cd70b0763ce6ec3b290->leave($__internal_cda98aae6fd8d21e19bb1f0ff03ad4456fde34801d516cd70b0763ce6ec3b290_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
