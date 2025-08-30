<?php 
namespace App\Traits;

trait AwardsGroups{
 
   public function getAwardId()
    {
        $data['award_group_one'] = []; //ComBankRiskComplainces
        $data['award_group_five'] = []; //rc_solution_providers - profile_of_the_software_provider, areas_of_grc_the_software_covers
        $data['award_group_seven'] = [54]; //grc_anti_fin_crim_reporters
        $data['award_group_eleven'] = [25,26,41,43,44,50,51,52,53,59,60]; // Governors award 
        $data['award_group_twelve']  = []; //NonFI
        $data['award_group_two'] = [46]; //ESG Initiative
        $data['award_group_three'] = [2,6,8,10]; //com_bank_chief_risk_officers - recognised_professional_association_membership, number_of_independent_non_executive_directors, board_committee_in_place_covering_risk_management
        $data['award_group_four'] = [1,3,4,5,7,9,11,13,15,16,24,39,40,42]; //grc_employers - worklife_balance, pay_and_benefits, No_of_employees_who_rated
        $data['award_group_six'] = [55,56,57,58]; //grc_training_providers - profile_of_the_training_provider_and_areas_of_grc_covered, evidence_of_innovative_ways_of_teaching
        $data['award_group_eight'] = []; //Financial Crime Prevention Advisory Service - profile_of_the_advisory_service_provider, evidence_of_innovative_ways_of_promoting
        $data['award_group_nine'] = [47,48,49]; // women is GRC
        $data['award_group_ten'] = []; //Media Votes we
        return $data;
    }
}