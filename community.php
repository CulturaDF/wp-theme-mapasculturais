<?php
/*
 * Template name: Community
 */
?>
<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<article id="page-<?php the_ID(); ?>">
  <header class="page-header">
    <div class="container">
      <div class="twelve columns">
        <hr/>
      </div>
    </div>
    <div class="container">
      <div class="twelve columns">
        <div class="page-header-content has-icon">
          <div class="row">
            <span class="page-icon">
              <span class="fa fa-group"></span>
            </span>
            <h2><?php the_title(); ?></h2>
          </div>
          <div class="row">
            <div class="four columns">
              <div class="page-header-text connect-border connect-left">
                <ul class="feature-list">
                  <li>Qualquer município ou estado pode instalar a plataforma</li>
                  <li>Mapas Culturais é resultado do trabalho colaborativo de diversos parceiros</li>
                  <li>Participe da rede de desenvolvedores que trabalha para aprimorar a solução</li>
                </ul>
              </div>
            </div>
            <div class="eight columns">
              <div class="community-numbers">
                <div class="intro-numbers">
                  <p class="icon fa fa-code"></p>
                  <p class="number do-count">4681</p>
                  <p class="label">contribuições no código</p>
                </div>
                <div class="intro-numbers">
                  <p class="icon fa fa-code-fork"></p>
                  <p class="number do-count">29</p>
                  <p class="label">desenvolvedores colaborando</p>
                </div>
                <div class="intro-numbers">
                  <p class="icon fa fa-comments-o"></p>
                  <p class="number do-count">161</p>
                  <p class="label">questões em discussão no GitHub</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="content">
    <div class="code-chart-container">
      <div class="gh-chart">
      </div>
      <h3>Atividade recente do repositório</h3>
    </div>
    <div class="container">
      <div class="four columns">
        <div class="community-intro connect-border connect-left parent-height" data-parent=".container">
          <h2>Discussões</h2>
          <p>In at est ac magna suscipit fermentum. Sed efficitur nisl a tristique malesuada. Etiam tempor lorem vel sapien congue volutpat. Nulla luctus felis ut diam congue, nec dignissim quam placerat.</p>
          <div class="featured-categories">
            <ul>
              <li>
                <a href="#">Categoria #1</a>
              </li>
              <li>
                <a href="#">Categoria #2</a>
              </li>
              <li>
                <a href="#">Categoria #3</a>
              </li>
              <li>
                <a href="#">Categoria #4</a>
              </li>
              <li>
                <a href="#">Categoria #5</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="eight columns">
        <div class="row">
          <section class="community-session">
            <p>Você não está conectado, <a href="#">cadastre-se</a> ou efetue <a href="#">login</a>.</p>
          </section>
        </div>
        <div class="row">
          <?php
          $debating_query = new WP_Query(array(
            'post_type' => 'pauta',
            'tax_query' => array(
              array(
                'taxonomy' => 'situacao',
                'field' => 'slug',
                'terms' => 'discussao'
              )
            )
          ));
          ?>
          <section class="content-section">
            <header class="content-section-header">
              <h3>Pautas em discussão</h3>
              <p class="section-description">Acompanhe e participe do debate das pautas em discussão.</p>
            </header>
            <?php
            if($debating_query->have_posts()) :
              while($debating_query->have_posts()) :
                $debating_query->the_post();
                ?>
                <?php get_template_part('parts/topic-item'); ?>
                <?php
                wp_reset_postdata();
              endwhile;
            else :
              ?>
              <p>Nenhuma pauta foi encontrada</p>
              <?php
            endif;
            ?>
          </section>
        </div>
        <hr class="dark" />
        <div class="row">
          <div class="six columns">
            <?php
            $proposal_query = new WP_Query(array(
              'post_type' => 'pauta',
              'tax_query' => array(
                array(
                  'taxonomy' => 'situacao',
                  'field' => 'slug',
                  'terms' => 'validacao'
                )
              )
            ));
            ?>
            <section class="content-section community-section topic-proposal-section">
              <header class="content-section-header">
                <h3>Propostas de pauta</h3>
                <p class="section-description">Vote para abrir discussão sobre as pautas propostas.</p>
              </header>
              <?php
              if($proposal_query->have_posts()) :
                while($proposal_query->have_posts()) :
                  $proposal_query->the_post();
                  ?>
                  <?php get_template_part('parts/topic-item'); ?>
                  <?php
                  wp_reset_postdata();
                endwhile;
              else :
                ?>
                <p>Nenhuma pauta foi encontrada</p>
                <?php
              endif;
              ?>
            </section>
          </div>
          <div class="six columns">
            <?php
            $debating_query = new WP_Query(array(
              'post_type' => 'pauta',
              'tax_query' => array(
                array(
                  'taxonomy' => 'situacao',
                  'field' => 'slug',
                  'terms' => 'comresolucao'
                )
              )
            ));
            ?>
            <section class="content-section community-section topic-resolved-section">
              <header class="content-section-header">
                <h3>Pautas com resolução</h3>
                <p class="section-description">Veja as resoluções das pautas concluídas.</p>
              </header>
              <?php
              if($debating_query->have_posts()) :
                while($debating_query->have_posts()) :
                  $debating_query->the_post();
                  ?>
                  <?php get_template_part('parts/topic-item'); ?>
                  <?php
                  wp_reset_postdata();
                endwhile;
              else :
                ?>
                <p>Nenhuma pauta foi encontrada</p>
                <?php
              endif;
              ?>
            </section>
          </div>
        </div>
      </div>
    </div>
  <section>
</article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
