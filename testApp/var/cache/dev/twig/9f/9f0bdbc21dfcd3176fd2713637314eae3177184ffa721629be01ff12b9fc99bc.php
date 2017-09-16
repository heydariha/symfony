<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_035d5de76bad5154611344b9ac0306e9d8411a66319f11808d0e93e055efb968 extends Twig_Template
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
        $__internal_3b34f7bbc46a48229d0ecddd8ebad3f865a00fbb619fec204c1f459aad091507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b34f7bbc46a48229d0ecddd8ebad3f865a00fbb619fec204c1f459aad091507->enter($__internal_3b34f7bbc46a48229d0ecddd8ebad3f865a00fbb619fec204c1f459aad091507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f6c4988fc384f8beb1fb51f0c345041d2ce338b64d801c318d74312ffc3df845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c4988fc384f8beb1fb51f0c345041d2ce338b64d801c318d74312ffc3df845->enter($__internal_f6c4988fc384f8beb1fb51f0c345041d2ce338b64d801c318d74312ffc3df845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_3b34f7bbc46a48229d0ecddd8ebad3f865a00fbb619fec204c1f459aad091507->leave($__internal_3b34f7bbc46a48229d0ecddd8ebad3f865a00fbb619fec204c1f459aad091507_prof);

        
        $__internal_f6c4988fc384f8beb1fb51f0c345041d2ce338b64d801c318d74312ffc3df845->leave($__internal_f6c4988fc384f8beb1fb51f0c345041d2ce338b64d801c318d74312ffc3df845_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
