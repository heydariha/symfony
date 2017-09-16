<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_15990f39ab107fcbd6be20dffc78a71b16ab0e093cc1cc37c9d359700a10ffd0 extends Twig_Template
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
        $__internal_4a77341f3d7e6a9a43d420e1260c921d4283d79a85ec0b2977f68288770c7d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a77341f3d7e6a9a43d420e1260c921d4283d79a85ec0b2977f68288770c7d2c->enter($__internal_4a77341f3d7e6a9a43d420e1260c921d4283d79a85ec0b2977f68288770c7d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_9a6c0b173fad2ceb88a9c43535723f12ba75cfd8e5d85ff7285dfd958c138185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6c0b173fad2ceb88a9c43535723f12ba75cfd8e5d85ff7285dfd958c138185->enter($__internal_9a6c0b173fad2ceb88a9c43535723f12ba75cfd8e5d85ff7285dfd958c138185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4a77341f3d7e6a9a43d420e1260c921d4283d79a85ec0b2977f68288770c7d2c->leave($__internal_4a77341f3d7e6a9a43d420e1260c921d4283d79a85ec0b2977f68288770c7d2c_prof);

        
        $__internal_9a6c0b173fad2ceb88a9c43535723f12ba75cfd8e5d85ff7285dfd958c138185->leave($__internal_9a6c0b173fad2ceb88a9c43535723f12ba75cfd8e5d85ff7285dfd958c138185_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
