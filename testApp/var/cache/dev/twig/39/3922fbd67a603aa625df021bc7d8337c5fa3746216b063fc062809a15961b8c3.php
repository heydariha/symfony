<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_813d99ef0d6b208d6e353d560da2bfc8f22822f9aecd8e20199f983a94aca8d9 extends Twig_Template
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
        $__internal_f8c78994ba6fdafb0c98797607a1ecf9659c9bf27af3b93de7123c7679696904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c78994ba6fdafb0c98797607a1ecf9659c9bf27af3b93de7123c7679696904->enter($__internal_f8c78994ba6fdafb0c98797607a1ecf9659c9bf27af3b93de7123c7679696904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9c64fd5ba039170cdb69e92d1a739889c25b974a91c0f539f4c86da43c6882d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c64fd5ba039170cdb69e92d1a739889c25b974a91c0f539f4c86da43c6882d6->enter($__internal_9c64fd5ba039170cdb69e92d1a739889c25b974a91c0f539f4c86da43c6882d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f8c78994ba6fdafb0c98797607a1ecf9659c9bf27af3b93de7123c7679696904->leave($__internal_f8c78994ba6fdafb0c98797607a1ecf9659c9bf27af3b93de7123c7679696904_prof);

        
        $__internal_9c64fd5ba039170cdb69e92d1a739889c25b974a91c0f539f4c86da43c6882d6->leave($__internal_9c64fd5ba039170cdb69e92d1a739889c25b974a91c0f539f4c86da43c6882d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
