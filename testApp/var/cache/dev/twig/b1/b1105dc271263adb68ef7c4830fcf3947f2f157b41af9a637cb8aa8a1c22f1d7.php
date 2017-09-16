<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_544eceb123f90ab3edc622926914de35dee6fef7a019f24b2b99c393bf87f121 extends Twig_Template
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
        $__internal_39807e4516ed203f712813a46fd7d39a006040dad3cc0aa71eb55b9cd113eb9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39807e4516ed203f712813a46fd7d39a006040dad3cc0aa71eb55b9cd113eb9c->enter($__internal_39807e4516ed203f712813a46fd7d39a006040dad3cc0aa71eb55b9cd113eb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ee68424270f1842c4c94561e6cbccc723c184b92fdd41bdcb1df70aceb1d3568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee68424270f1842c4c94561e6cbccc723c184b92fdd41bdcb1df70aceb1d3568->enter($__internal_ee68424270f1842c4c94561e6cbccc723c184b92fdd41bdcb1df70aceb1d3568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_39807e4516ed203f712813a46fd7d39a006040dad3cc0aa71eb55b9cd113eb9c->leave($__internal_39807e4516ed203f712813a46fd7d39a006040dad3cc0aa71eb55b9cd113eb9c_prof);

        
        $__internal_ee68424270f1842c4c94561e6cbccc723c184b92fdd41bdcb1df70aceb1d3568->leave($__internal_ee68424270f1842c4c94561e6cbccc723c184b92fdd41bdcb1df70aceb1d3568_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
