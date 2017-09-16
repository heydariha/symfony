<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_c3881a6fa7557b791aa1babc7bc910e31dfc70ab8e11957f533b906e774406c4 extends Twig_Template
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
        $__internal_fe2a569b381871a04d09a2d5de687f487d0e8234866e7efd708314a80fd71b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe2a569b381871a04d09a2d5de687f487d0e8234866e7efd708314a80fd71b8d->enter($__internal_fe2a569b381871a04d09a2d5de687f487d0e8234866e7efd708314a80fd71b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_33a3d0a198300e6ef274e6d4a65ead07a1937fce02f7bcb4ed6b443502799f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33a3d0a198300e6ef274e6d4a65ead07a1937fce02f7bcb4ed6b443502799f68->enter($__internal_33a3d0a198300e6ef274e6d4a65ead07a1937fce02f7bcb4ed6b443502799f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_fe2a569b381871a04d09a2d5de687f487d0e8234866e7efd708314a80fd71b8d->leave($__internal_fe2a569b381871a04d09a2d5de687f487d0e8234866e7efd708314a80fd71b8d_prof);

        
        $__internal_33a3d0a198300e6ef274e6d4a65ead07a1937fce02f7bcb4ed6b443502799f68->leave($__internal_33a3d0a198300e6ef274e6d4a65ead07a1937fce02f7bcb4ed6b443502799f68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
