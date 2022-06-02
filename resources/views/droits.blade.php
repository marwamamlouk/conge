@extends('layouts.master')

@section('content')
    <div class="wrapper">
        @include('includes.header')
        @include('includes.aside')
        <div class="content-wrapper">
            <div class="content">
                <div class="container-fluid">
                  @include('includes.stat')
                </div>
                <div class="droit">
                    <div class="titre">
                        <h2>Droit de congé</h2>
                    </div>
                    <div class="chapiter">
                        <h4 class="chapiter-title">Droit de Congé</h4>
                        <p class="section">Section 1 - Dispositions générales</p>
                        <p class="article">Article 1</p>
                        <p class="content">
                            Les congés sont accordés par les chefs des administrations, des  collectivités publiques locales ou des établissements publics à caractère admi- nistratif.
                            Sauf cas d'indisponibilité subite, à charge de régularisation ultérieure, aucun fonctionnaire ne peut interrompre l'exercice de ses fonctions s'il n'a de- mandé et obtenu un congé.
                            Toute absence non justifiée par un congé régulier conformément aux dispositions de la présente loi, donne lieu à retenue sur salaire au titre des journées d'absence, sans préjudice, le cas échéant, des sanctions disciplinaires.
                            Les congés se divisent en :
                            1°) congés administratifs comprenant les congés de repos et les congés exceptionnels,
                            2°) congés pour raisons de santé comprenant les congés de maladie de longue durée, les congés de maladie ordinaire, les congés de maternité et les congés post nataux,
                            3°) congés pour formation continue, 4°) congés sans solde,
                            5°) congés pour la création d’une entreprise. (1)
                            Les congés de maladie n'entrent pas en  ligne de compte dans le calcul de la durée de congés administratifs et réciproquement.
                            Un congé de repos peut faire suite à un congé de maladie.
                            En revanche, un congé de maladie ne peut faire suite à un congé de repos sauf autorisation de la commission médicale prévue à l'article 43 de la pré- sente loi.

                        </p>
                        <div class="article">
                            Article 2
                        </div>
                        <p class="content">
                            Il est interdit au fonctionnaire bénéficiaire d'un congé de se livrer à toute
                            activité rémunérée, sous peine d'application des dispositions de l'article 56 de la présente loi.
                        </p>
                        <p class="section">
                        Section 2 - Congés administratifs
                        </p>
                        <p class="article">
                        Article 3 (Modifié par la loi n° 97-83 du 20 décembre 1997)
                        </p>
                        <p class="content">
                            Tout fonctionnaire en activité a droit à :
                            1)	un congé de repos hebdomadaire d’une durée d’un jour,
                            2)	un congé de repos annuel d’une durée d’un mois à plein traitement par année de services effectifs du 1er janvier au 31 décembre, les fonctionnaires qui n’ont pas exercé leurs fonctions pendant la totalité de la période ouvrant droit au bénéfice du congé de repos annuel, ont droit à une période de congé payé calculée comme suit :
                            -	deux jours et demi de repos pour chaque mois de services effectifs,
                            -	une demi-journée de repos pour chaque six (6) jours de services effectifs, pour les périodes de service inférieure à un mois.
                            L’administration peut effectuer une répartition des congés compte tenu de la nécessité de service, elle peut également s’opposer à tout fractionnement du congé annuel de repos.
                            Les fonctionnaires ayant des enfants à charge bénéficient de la priorité pour le choix et la fixation de la période de congé annuel de repos.
                        </p>
                        <p class="article">
                        Article 4 (Modifié par la loi n° 97-83 du 20 décembre 1997)
                        </p>
                        <p class="content">
                        L’administration peut décider, pour des raisons que l’intérêt du service peut rendre nécessaires, le report du congé de repos annuel attribué aux fonctionnaires, et ce, pour une seule année suivant celle au titre de laquelle le congé est dû.
                        </p>
                        <p class="article">
                            II - CONGES EXCEPTIONNELS
                        </p>
                        <p class="article">
                            Article 5
                        </p>
                        <p class="content">
                            Des congés exceptionnels peuvent être accordés à plein traitement et sans entrer en ligne de compte dans le calcul des congés de repos :
                            1°) pour l'accomplissement d'un des devoirs imposés par la loi dans la limite de la durée nécessaire à cet effet,
                            2°) pour l'accomplissement du pèlerinage. Ce congé exceptionnel ne peut être accordé que pour un mois au maximum durant la période de pèlerinage et une seule fois dans la carrière,
                            3°) pour l'accomplissement de devoirs impérieux de famille et dans la limite de 6 jours par an,

                            4°) à l'occasion de chaque naissance au foyer du fonctionnaire chef de famille. La durée de ce congé est fixée à deux jours ouvrables devant intervenir dans un délai qui expire dix jours après la date de naissance. Les naissances gémellaires ou multiples ne donnent droit qu'à un seul congé de cette nature,
                            5°) à l'occasion de la convocation des congrès professionnels, syndicaux, fédéraux, nationaux, internationaux, ou des organismes directeurs, aux fonc- tionnaires représentants dûment mandatés, ou membres élus des organismes directeurs;
                            6°) à l'occasion de la convocation des congrès des partis politiques et des organisations nationales et de jeunesse,
                            7°) à l'occasion de la convocation à des compétitions internationales, aux fonctionnaires faisant partie d'équipes nationales sportives. Ce congé est accordé sur la demande du ministre de la jeunesse et des sports.
                            La durée des congés prévus aux paragraphes 5, 6 et 7 du présent article est égale au total des journées indiquées dans les convocations, augmentées, le cas échéant, des délais de routes nécessaires.
                        </p>
                        <p class="section">
                            Section 3 - Congés pour raison de santé
                        </p>
                        <p class="article">
                            I - Congés de maladie ordinaire
                        </p>
                        <p class="article">
                            Article 6
                        </p>
                        <p class="content">
                            En cas de maladie dûment constatée et le mettant dans l'impossibilité d'exercer ses fonctions, le fonctionnaire peut obtenir un congé de maladie ordinaire.
                            Toute demande de congé pour maladie doit être appuyée d'un certificat médical indiquant le temps présumé pendant lequel le fonctionnaire est hors d'état d'exercer ses fonctions.
                            L'administration effectue tout contrôle utile par un médecin de la santé publique ou par le médecin désigné à cet effet.
                            Indépendamment de ce contrôle médical, elle prescrit toutes mesures de contrôle administratif à l'effet de s'assurer que le fonctionnaire n'use de son congé qu'en vue de se soigner.
                            Sauf cas d'urgence dûment établi, le fonctionnaire, bénéficiant d'un congé de maladie, ne peut quitter sa résidence habituelle que sur autorisation de son administration.
                        </p>
                        <p class="article">
                        Article 7 (Modifié par la loi n°97-83 du 20 décembre 1997)
                        </p>
                        <p class="content">
                            Durant les premiers mois de son recrutement et tant qu’il n’a pas accompli une période minimum de 365 jours, le fonctionnaire a droit à un congé de maladie ordinaire à plein traitement, à raison de cinq (5) jours pour chaque mois de services effectifs.
                            Le fonctionnaire qui a accompli ses fonctions pendant une période minimum de 365 jours a droit à un congé de maladie ordinaire dont la durée maximum est fixée à douze (12) mois dont deux (2) à plein traitement et dix
                            (10) à demi-traitement.

                            Pendant la durée du congé de maladie à demi-traitement, le fonctionnaire conserve la totalité des indemnités à caractère familial.
                            Sont inclus dans la période minimum de 365 jours, les périodes de services effectifs, les congés de repos, les jours fériés, les congés pour formation continue, les congés de maternité et les congés exceptionnels.
                            Le fonctionnaire qui a épuisé ses droits à congé de maladie ordinaire à plein traitement ou à demi-traitement ne peut obtenir à nouveau un congé de maladie ordinaire, que lorsqu’il aura accompli ses fonctions durant une nouvelle période minimum commence à courir le jour de la reprise de service à l’issue du premier congé de maladie ordinaire obtenu au titre de la précédante période de travail de 365 jours.
                            Est considéré en disponibilité d’office, tout fonctionnaire qui s’absente pour raison de maladie après avoir épuisé ses droits à congé de maladie ordinaire.
                            Lorsque le fonctionnaire qui a épuisé ses droits à congé de maladie ordinaire est reconnu définitivement inapte, il est admis à la retraite.
                        </p>
                        <p class="article">
                            Article 8
                        </p>
                        <p class="content">
                            Les congés de maladie ordinaire, ne dépassant pas au total 30 jours par période de 365 jours, sont accordés directement par le chef de l'administration, de la collectivité publique locale ou de l'établissement public à caractère administratif.
                            Dans tous les autres cas, les congés de maladie ordinaire d'une durée supérieure à 30 jours ne peuvent être accordés par le Chef de l'Administration intéressée que sur avis conforme d'une commission médicale dont la composition et le fonctionnement sont fixés par décret.
                        </p>
                        <p class="article">
                        II - CONGES DE MALADIE DE LONGUE DUREE
                        </p>
                        <p class="article">
                            Article 9
                        </p>
                        <p class="content">
                            Les congés de maladie de longue durée peuvent être accordés aux fonctionnaires de l'Etat, des collectivités publiques locales et des éta- blissements publics à caractère administratif, en exercice ou en congé de maladie ordinaire, atteints d'une des maladies dont la liste est fixée par décret après avis du conseil supérieur de la fonction publique et de la réforme administrative.
                            Ces congés ne pourraient, en aucun cas, être accordés s'il est établi que ces maladies étaient consécutives à la consommation de boissons alcoolisées ou à l'usage de stupéfiant.
                            Ces congés sont attribués par le chef de l'administration du fonctionnaire soit à la demande de l'intéressé, soit à l'initiative de l'administration, et ce, après avis conforme d'une commission médicale dont la composition et le fonctionnement sont fixés par décret.
                        </p>
                        <p class="article">
                            Article 10
                        </p>
                        <p class="content">
                            Le congé de maladie de longue durée est accordé pour une période de cinq
                            (5) ans dont trois (3) ans à plein traitement et deux (2) ans à demi- traitement.
                        </p>
                        <p class="article">
                        III - DISPOSITIONS COMMUNES AUX CONGES DE MALADIE
                        </p>
                        <p class="article">
                            Article 11
                        </p>
                        <p class="content">
                            Lorsque la maladie ordinaire ou de longue durée est contractée ou aggravée soit en service soit en accomplissant un  acte de  dévouement dans l'intérêt général, soit à la suite d'un accident survenu à l'occasion de l'exercice des fonctions, le fonctionnaire conserve l'intégralité de ses émoluments jusqu'à ce qu'il soit en état de reprendre son service. Dans tous ces cas, il a droit au remboursement des honoraires médicaux et des frais entraînés directement par la maladie ou l'accident.
                            Lorsque le fonctionnaire visé au paragraphe précédent est reconnu définitivement inapte il est admis à faire valoir ses droits à la retraite. Dans ce cas, il a droit à une rente viagère d'invalidité pour incapacité permanente cumulable avec la pension de retraite.
                        </p>
                        <p class="article">
                            Article 12
                        </p>
                        <p class="content">
                            Les congés de maladie à passer hors du territoire de la République doivent faire l'objet, sauf cas d'urgence, d'une autorisation préalable du chef de l'administration intéressée.
                        </p>
                        <p class="article">
                            IV - CONGE DE MATERNITE ET CONGE POST-NATAL
                        </p>
                        <p class="article">
                            Article 13
                        </p>
                        <p class="content">
                            Le fonctionnaire de sexe féminin bénéficie, sur production d'un certificat médical, d'un congé de maternité de deux mois à plein traitement cumulable avec le congé de repos.
                            A l'issue du congé de maternité, un congé post-natal destiné à lui permettre d'élever ses enfants et ne dépassant pas quatre mois, à demi- traitement peut lui être accordé, sur sa demande.
                            Ces congés sont accordés directement par le Chef de l'Administration.
                        </p>
                        <p class="article">
                        Article 14 (bis) (Ajouté par la loi n° 97-83 du 20 décembre 1997)
                        </p>
                        <p class="content">
                            Le repos d’allaitement :
                            La femme fonctionnaire a droit, sur sa demande, à un repos d’allaitement d’une heure, en début ou au terme de la séance de travail, à condition que la durée de la séance de travail ne soit pas inférieure à quatre heures.
                            Au cas où le travail est aménagé en deux séances, il est accordé à l’intéressée deux repos d’une heure chacun, au début ou à la fin de chaque séance, à condition que la durée minimum totale de travail soit égale à sept heures par jour.
                            Le repos d’allaitement est accordé pour une période maximum de six mois à compter de la fin du congé de maternité.
                        </p>
                        <p class="section">
                        Section 4 - Congé pour formation continue
                        </p>
                        <p class="article">
                        Article 15
                        </p>
                        <p class="content">
                            Le fonctionnaire peut demander un congé pour participer à un cycle de formation continue organisé par l'administration.
                            Les modalités d'application de ces dispositions sont déterminées par décret.
                        </p>
                        <p class="section">
                        Section 5 - Congé sans solde
                        </p>
                        <p class="article">
                            Article 16
                        </p>
                        <p class="content">
                        Des congés sans solde peuvent être accordés aux fonctionnaires. La durée du congé sans solde, qui ne peut excéder trois mois par année, n'est pas considérée comme service effectif.
                        </p>
                        <p class="section">
                            Section 6 (1)
                            Congé pour la création d’une entreprise
                        </p>
                        <p class="article">
                        Article 17 (bis) (Paragraphe premier et 3 modifiés par l’article 34 de la loi n° 2007-69 du 27 décembre 2007)
                        </p>
                        <p class="content">
                            Un congé pour la création d’une entreprise peut être accordé au fonctionnaire titulaire pour une durée maximale d’une année renouvelable une seule fois. Ce congé est renouvelable deux fois dans le cas où l’entreprise est créée dans les zones de développement régional. Il peut être accordé dans le cadre de la transmission prévue par la loi n° 95-34 relative au redressement des entreprises en difficultés économiques telle que modifiée et complétée par les textes subséquents. Ce congé est  accordé par décret.
                            Durant la période du congé pour la création d’une entreprise, le fonctionnaire continue de bénéficier de la couverture sociale.  Sur  cette base l’intéressé doit procéder au paiement de sa cotisation au titre du régime de retraite, de prévoyance sociale et du capital décès alors que l’administration se charge de payer les contributions mises à la charge de l’employeur. Dans ce cas, l’intéressé perd son droit au bénéfice du traitement, de l’avancement et de la promotion.
                            Dans le cas où l’entreprise est créée dans les zones de développement régional et nonobstant les dispositions législatives contraires, le fonctionnaire continue de bénéficier de la couverture sociale pendant les trois années et du demi-traitement pendant les deux premières années, sans pour autant avoir  le droit à l’avancement et à la promotion.
                        </p>
                        <p class="article">
                        Article 18 (ter)
                        </p>
                        <p class="content">
                            Il est interdit au fonctionnaire bénéficiaire d’un congé pour la création d’une entreprise d’exercer une activité contraire au motif au titre duquel le congé a été accordé.
                            Le chef de l’administration, de la collectivité locale ou de l’établissement public à caractère administratif peut à tout moment faire procéder aux enquêtes nécessaires en vue de s’assurer que l’activité du fonctionnaire concerné correspond réellement aux motifs pour lesquels le congé pour la création d’une entreprise a été accordé.
                            S’il est établi que l’intéressé a contrevenu aux conditions d’octroi de ce congé, il est immédiatement mis fin au congé et, le cas échéant, l’intéressé doit rembourser les sommes dont il a bénéficié, sans préjudice des poursuites disciplinaires.
                        </p>
                        <p class="article">
                        Article 19 (quater) (Paragraphe premier modifié par l’article 34 de la loi n° 2007 69 du 27 décembre 2007)
                        </p>
                        <p class="content">
                            Le fonctionnaire bénéficiaire d’un congé pour la création d’une entreprise doit demander par lettre recommandée sa réintégration ou le renouvellement de ce congé pour une deuxième année ou pour une troisième année dans le cas où l’entreprise est créée dans les zones de développement régional et ce dans un délai d’un mois au moins avant l’expiration de la période du congé.
                            A l’expiration de la période du congé pour la création d’une entreprise, le fonctionnaire a le droit de réintégrer son corps d’origine même en surnombre. Ce surnombre doit être résorbé à la première vacance venant à s’ouvrir dans le corps considéré.
                            Au cas où le fonctionnaire ne demande pas sa réintégration dans le délai ci- dessus indiqué, et après avoir été mis en demeure, il est considéré comme ayant rompu tout lien avec le service public.
                        </p>
                        <p class="article">
                        Article 20 quinto
                        </p>
                        <p class="content">
                        Les procédures et les modalités d’application des dispositions prévues par les articles 35 (5ème sous paragraphe nouveau), 50 (bis), 50 (ter) et 50 (quater) de la présente loi sont fixées par décret.
                        </p>





                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
