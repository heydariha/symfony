<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_70b1e2a7bde8dd80773bb175d771ca222c4fe9bccd1d1596af18e633d5f7a3f2 extends Twig_Template
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
        $__internal_f63ed2343fd0e11e16488df0d64fe7a8cc10a9fa657d252ef2ae6f74cb44e055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63ed2343fd0e11e16488df0d64fe7a8cc10a9fa657d252ef2ae6f74cb44e055->enter($__internal_f63ed2343fd0e11e16488df0d64fe7a8cc10a9fa657d252ef2ae6f74cb44e055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b643c2020e4c9e7a2d4cd32eee536d629809d17d6db20e85b4c54e4388466d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b643c2020e4c9e7a2d4cd32eee536d629809d17d6db20e85b4c54e4388466d10->enter($__internal_b643c2020e4c9e7a2d4cd32eee536d629809d17d6db20e85b4c54e4388466d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f63ed2343fd0e11e16488df0d64fe7a8cc10a9fa657d252ef2ae6f74cb44e055->leave($__internal_f63ed2343fd0e11e16488df0d64fe7a8cc10a9fa657d252ef2ae6f74cb44e055_prof);

        
        $__internal_b643c2020e4c9e7a2d4cd32eee536d629809d17d6db20e85b4c54e4388466d10->leave($__internal_b643c2020e4c9e7a2d4cd32eee536d629809d17d6db20e85b4c54e4388466d10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
