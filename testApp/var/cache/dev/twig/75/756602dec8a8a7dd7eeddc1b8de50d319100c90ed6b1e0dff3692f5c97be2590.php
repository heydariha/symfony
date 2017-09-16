<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_39fd64b77a20582ceb43ddb85a8a4b5edce979b354dcfab69ebb7cc4ae260f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bddc1917fb46388e7427fad597e6503c93e193741686847729a71d32fc641707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bddc1917fb46388e7427fad597e6503c93e193741686847729a71d32fc641707->enter($__internal_bddc1917fb46388e7427fad597e6503c93e193741686847729a71d32fc641707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_ef7863b7e14154bad3cc680d7133e0a61c9fc40c7d4d79e9514471a30b09a22c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7863b7e14154bad3cc680d7133e0a61c9fc40c7d4d79e9514471a30b09a22c->enter($__internal_ef7863b7e14154bad3cc680d7133e0a61c9fc40c7d4d79e9514471a30b09a22c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bddc1917fb46388e7427fad597e6503c93e193741686847729a71d32fc641707->leave($__internal_bddc1917fb46388e7427fad597e6503c93e193741686847729a71d32fc641707_prof);

        
        $__internal_ef7863b7e14154bad3cc680d7133e0a61c9fc40c7d4d79e9514471a30b09a22c->leave($__internal_ef7863b7e14154bad3cc680d7133e0a61c9fc40c7d4d79e9514471a30b09a22c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c4e7c2c79751f36f8695cba072b3bcf0d01e277686be369ee786db55d4fed5da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e7c2c79751f36f8695cba072b3bcf0d01e277686be369ee786db55d4fed5da->enter($__internal_c4e7c2c79751f36f8695cba072b3bcf0d01e277686be369ee786db55d4fed5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a11a672edef1f6fe98c016433e4572c40e298dbaeea3ae4111b3eaceaa2cb494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11a672edef1f6fe98c016433e4572c40e298dbaeea3ae4111b3eaceaa2cb494->enter($__internal_a11a672edef1f6fe98c016433e4572c40e298dbaeea3ae4111b3eaceaa2cb494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_a11a672edef1f6fe98c016433e4572c40e298dbaeea3ae4111b3eaceaa2cb494->leave($__internal_a11a672edef1f6fe98c016433e4572c40e298dbaeea3ae4111b3eaceaa2cb494_prof);

        
        $__internal_c4e7c2c79751f36f8695cba072b3bcf0d01e277686be369ee786db55d4fed5da->leave($__internal_c4e7c2c79751f36f8695cba072b3bcf0d01e277686be369ee786db55d4fed5da_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3784a6aaed57c1ba962b0766024158e595b4e637ccdfed7b6a778d051560bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3784a6aaed57c1ba962b0766024158e595b4e637ccdfed7b6a778d051560bdb->enter($__internal_b3784a6aaed57c1ba962b0766024158e595b4e637ccdfed7b6a778d051560bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ab29903ff3f6398c75d8893cf419ac86eb0337fd2d7753e8777793ec69cc4c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ab29903ff3f6398c75d8893cf419ac86eb0337fd2d7753e8777793ec69cc4c0->enter($__internal_3ab29903ff3f6398c75d8893cf419ac86eb0337fd2d7753e8777793ec69cc4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3ab29903ff3f6398c75d8893cf419ac86eb0337fd2d7753e8777793ec69cc4c0->leave($__internal_3ab29903ff3f6398c75d8893cf419ac86eb0337fd2d7753e8777793ec69cc4c0_prof);

        
        $__internal_b3784a6aaed57c1ba962b0766024158e595b4e637ccdfed7b6a778d051560bdb->leave($__internal_b3784a6aaed57c1ba962b0766024158e595b4e637ccdfed7b6a778d051560bdb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d5b6dbfae54cd990a124aa53b7f3266268203d9cfb8529b5c1e30266c1a2ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5b6dbfae54cd990a124aa53b7f3266268203d9cfb8529b5c1e30266c1a2ccb->enter($__internal_9d5b6dbfae54cd990a124aa53b7f3266268203d9cfb8529b5c1e30266c1a2ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0ae871c19005110cae0753b5e0b8ff6d374a58ca29e02f8464b6d5fb296790fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ae871c19005110cae0753b5e0b8ff6d374a58ca29e02f8464b6d5fb296790fb->enter($__internal_0ae871c19005110cae0753b5e0b8ff6d374a58ca29e02f8464b6d5fb296790fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_0ae871c19005110cae0753b5e0b8ff6d374a58ca29e02f8464b6d5fb296790fb->leave($__internal_0ae871c19005110cae0753b5e0b8ff6d374a58ca29e02f8464b6d5fb296790fb_prof);

        
        $__internal_9d5b6dbfae54cd990a124aa53b7f3266268203d9cfb8529b5c1e30266c1a2ccb->leave($__internal_9d5b6dbfae54cd990a124aa53b7f3266268203d9cfb8529b5c1e30266c1a2ccb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\testSym\\testApp\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
