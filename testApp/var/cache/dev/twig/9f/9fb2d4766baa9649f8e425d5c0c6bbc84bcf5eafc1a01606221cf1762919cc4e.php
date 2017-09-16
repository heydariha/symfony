<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5ddba719c9c84dc2f1630e2c3acede31e8f782f793cd37e0132f1ab76dae1f2a extends Twig_Template
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
        $__internal_167ec97e6bfcda5b28c7c64702e2dcdfef2ea39b5f820b0c587d2910f276f917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_167ec97e6bfcda5b28c7c64702e2dcdfef2ea39b5f820b0c587d2910f276f917->enter($__internal_167ec97e6bfcda5b28c7c64702e2dcdfef2ea39b5f820b0c587d2910f276f917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d166e42baef04f3936898d0ac13e856ae94d038f8aa26b286adfaf7a44b3ee38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d166e42baef04f3936898d0ac13e856ae94d038f8aa26b286adfaf7a44b3ee38->enter($__internal_d166e42baef04f3936898d0ac13e856ae94d038f8aa26b286adfaf7a44b3ee38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_167ec97e6bfcda5b28c7c64702e2dcdfef2ea39b5f820b0c587d2910f276f917->leave($__internal_167ec97e6bfcda5b28c7c64702e2dcdfef2ea39b5f820b0c587d2910f276f917_prof);

        
        $__internal_d166e42baef04f3936898d0ac13e856ae94d038f8aa26b286adfaf7a44b3ee38->leave($__internal_d166e42baef04f3936898d0ac13e856ae94d038f8aa26b286adfaf7a44b3ee38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
