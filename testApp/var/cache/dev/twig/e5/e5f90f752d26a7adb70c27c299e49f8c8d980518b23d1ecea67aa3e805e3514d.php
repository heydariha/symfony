<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_41528b0a910c67afbc829d8c99cafeedc5539d49b4d56fa069c84ab9f6226e9b extends Twig_Template
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
        $__internal_1f131a2d5a54becd8f625bf8421a47a330035a323cd84c9e52ec74fca1a3649a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f131a2d5a54becd8f625bf8421a47a330035a323cd84c9e52ec74fca1a3649a->enter($__internal_1f131a2d5a54becd8f625bf8421a47a330035a323cd84c9e52ec74fca1a3649a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b2356f1911ad0a15124eabe04fe805914862f5e75a917a04c49983825bb34a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2356f1911ad0a15124eabe04fe805914862f5e75a917a04c49983825bb34a31->enter($__internal_b2356f1911ad0a15124eabe04fe805914862f5e75a917a04c49983825bb34a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_1f131a2d5a54becd8f625bf8421a47a330035a323cd84c9e52ec74fca1a3649a->leave($__internal_1f131a2d5a54becd8f625bf8421a47a330035a323cd84c9e52ec74fca1a3649a_prof);

        
        $__internal_b2356f1911ad0a15124eabe04fe805914862f5e75a917a04c49983825bb34a31->leave($__internal_b2356f1911ad0a15124eabe04fe805914862f5e75a917a04c49983825bb34a31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
