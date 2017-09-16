<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c7847c9774e3c0e990835cbbf897527f323b9e5d6725d033aded69cdb012604c extends Twig_Template
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
        $__internal_b8dc60a3a93181317a12ecfc92dc04c2ff623197b4f3355e833f9bb9413e5bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8dc60a3a93181317a12ecfc92dc04c2ff623197b4f3355e833f9bb9413e5bb0->enter($__internal_b8dc60a3a93181317a12ecfc92dc04c2ff623197b4f3355e833f9bb9413e5bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_951b7ab8cdf2c5df899dc7993d2e27fba26688c4c2984f932b61e58b74cb65a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_951b7ab8cdf2c5df899dc7993d2e27fba26688c4c2984f932b61e58b74cb65a7->enter($__internal_951b7ab8cdf2c5df899dc7993d2e27fba26688c4c2984f932b61e58b74cb65a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_b8dc60a3a93181317a12ecfc92dc04c2ff623197b4f3355e833f9bb9413e5bb0->leave($__internal_b8dc60a3a93181317a12ecfc92dc04c2ff623197b4f3355e833f9bb9413e5bb0_prof);

        
        $__internal_951b7ab8cdf2c5df899dc7993d2e27fba26688c4c2984f932b61e58b74cb65a7->leave($__internal_951b7ab8cdf2c5df899dc7993d2e27fba26688c4c2984f932b61e58b74cb65a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
