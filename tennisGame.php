<?php
class TennisGame
{
    const NUMBER_ZERO = 0;
    const NUMBER_FIRST = 1;
    const NUMBER_SECOND = 2;
    const NUMBER_THIRD = 3;
    const NUMBER_FOUR = 4;


    public $score = '';
    public function getScore($m_score1, $m_score2)
    {
        $tempScore=self::NUMBER_ZERO;
        if ($m_score1==$m_score2) {
            switch ($m_score1)
            {
                case self::NUMBER_ZERO:
                    $this->score = "Love-All";
                    break;
                case self::NUMBER_FIRST:
                    $this->score = "Fifteen-All";
                    break;
                case self::NUMBER_SECOND:
                    $this->score = "Thirty-All";
                    break;
                case self::NUMBER_THIRD:
                    $this->score = "Forty-All";
                    break;
                default:
                    $this->score = "Deuce";
                    break;
            }
        }
        else if ($m_score1>=self::NUMBER_FOUR || $m_score2>=self::NUMBER_FOUR)
        {
            $minusResult = $m_score1-$m_score2;
            if ($minusResult==self::NUMBER_FIRST) $this->score ="Advantage player1";
            else if ($minusResult ==-self::NUMBER_FIRST) $this->score ="Advantage player2";
            else if ($minusResult>=self::NUMBER_SECOND) $this->score = "Win for player1";
            else $this->score ="Win for player2";
        }
        else
        {
            for ($i=self::NUMBER_FIRST; $i<self::NUMBER_THIRD; $i++)
            {
                if ($i==self::NUMBER_FIRST) $tempScore = $m_score1;
                else { $this->score.="-"; $tempScore = $m_score2;}
                switch($tempScore)
                {
                    case self::NUMBER_ZERO:
                        $this->score.="Love";
                        break;
                    case self::NUMBER_FIRST:
                        $this->score.="Fifteen";
                        break;
                    case self::NUMBER_SECOND:
                        $this->score.="Thirty";
                        break;
                    case self::NUMBER_THIRD:
                        $this->score.="Forty";
                        break;
                }
            }
        }
    }
    public function __toString()
    {
        return $this->score;
    }
}