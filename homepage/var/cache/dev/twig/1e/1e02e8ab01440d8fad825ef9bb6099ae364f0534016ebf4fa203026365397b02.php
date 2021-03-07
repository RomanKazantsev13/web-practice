<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* homepage.html.twig */
class __TwigTemplate_dca934a9a18c57d35c7342bfacbe5fca765009cd4287e257cb1ffa85e10e1758 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
      <meta charset=\"UTF-8\">
      <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
    ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Roman Kazantsev";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/app.bd1c8dc6.css"), "html", null, true);
        echo "\">
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "        <header>
          <p>Сайт-визитка. Обо мне.</p>
        </header>
        <article>
          <h1>Роман Казанцев</h1>
          <p>Я студент ПС-14. До того, как поступить в Волгатех на это направление я не увлекался программированием и всем, что с этим направлением связано. Несмотря на это, я мне удается хорошо решать различные задачи и получать за это высокие баллы. На мой взгляд самое главное в процессе обучения это мотивация.</p>
          <img src=\"Images/Roman.jpg\" alt=\"my photo\">
          <div class=\"my_hobbies\">
            <h2>Мои увлечения</h2>
            <ul>
              <li>Их нет</li>
              <li>так как</li>
              <li>все время</li>
              <li>уходит</li>
              <li>на учебу</li>
            </ul>
            <h2>Мои хобби</h2>
            <ol>
              <li>Их тоже нет</li>
              <li>так как</li>
              <li>единственное хобби</li>
              <li>на ближацшие 3,5 года</li>
              <li>это учеба на ПС</li>
            </ol>
          </div>
          <div class=\"clear\"></div>
          <div>
            <span>Хочешь написать мне? Жми на &#8594;</span> 
            <a href=\"https://vk.com/romashkins17\">VK</a>
          </div>
        </article>
        <footer>
          <p>Copyright &#169;Frontend 2021</p>
        </footer>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 12,  118 => 11,  105 => 7,  95 => 6,  76 => 5,  64 => 47,  62 => 11,  58 => 9,  56 => 6,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
      <meta charset=\"UTF-8\">
      <title>{% block title %}Roman Kazantsev{% endblock %}</title>
      {% block stylesheet %}
        <link rel=\"stylesheet\" href=\"{{ asset('build/app.bd1c8dc6.css') }}\">
      {% endblock %}
    </head>
    <body>
    {% block body %}
        <header>
          <p>Сайт-визитка. Обо мне.</p>
        </header>
        <article>
          <h1>Роман Казанцев</h1>
          <p>Я студент ПС-14. До того, как поступить в Волгатех на это направление я не увлекался программированием и всем, что с этим направлением связано. Несмотря на это, я мне удается хорошо решать различные задачи и получать за это высокие баллы. На мой взгляд самое главное в процессе обучения это мотивация.</p>
          <img src=\"Images/Roman.jpg\" alt=\"my photo\">
          <div class=\"my_hobbies\">
            <h2>Мои увлечения</h2>
            <ul>
              <li>Их нет</li>
              <li>так как</li>
              <li>все время</li>
              <li>уходит</li>
              <li>на учебу</li>
            </ul>
            <h2>Мои хобби</h2>
            <ol>
              <li>Их тоже нет</li>
              <li>так как</li>
              <li>единственное хобби</li>
              <li>на ближацшие 3,5 года</li>
              <li>это учеба на ПС</li>
            </ol>
          </div>
          <div class=\"clear\"></div>
          <div>
            <span>Хочешь написать мне? Жми на &#8594;</span> 
            <a href=\"https://vk.com/romashkins17\">VK</a>
          </div>
        </article>
        <footer>
          <p>Copyright &#169;Frontend 2021</p>
        </footer>
    {% endblock %}
    </body>
</html>
", "homepage.html.twig", "C:\\Users\\user\\Desktop\\Volgatech\\web-practice\\homepage\\templates\\homepage.html.twig");
    }
}
