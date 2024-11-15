using System;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.CompilerServices;
using System.Text;
using System.Threading.Tasks;

namespace AppFraction
{
    public class Fraction
    {
        private int numerateur;
        private int denominateur;

        public Fraction() : this(0, 1)
        {
        }

        public Fraction(int _numerateur, int _denominateur)
        {
            if(_denominateur == 0)
            {
                throw new ArgumentException("Le numerateur doit etre different de 0");
            }

            this.numerateur = _numerateur;
            this.denominateur = _denominateur;
        }

        public int Numerateur {get => numerateur; set => numerateur = value; }
        public int Denominateur {get => denominateur; set => denominateur = value; }

        public override string ToString()
        {
            string fraction = Numerateur + "/" + Denominateur;
            return fraction;
        }

        protected static double Calcul(int _numerateur, int _denominateur)
        {
            return (double)_numerateur / (double)_denominateur;
        }

        public void Oppose()
        {
            Numerateur = -Numerateur;
        }

        public void Inverse()
        {
            (Numerateur, Denominateur) = (Denominateur, Numerateur);
        }

        public bool SuperieurA(Fraction _autreFraction)
        {
            if(Calcul(_autreFraction.Numerateur,_autreFraction.Denominateur) > Calcul(this.Numerateur, this.Denominateur))
            {
                return false;
            }
            else
            {
                return true;
            }
        }

        public bool EgalA(Fraction _autreFraction)
        {
            if(Calcul(_autreFraction.Numerateur, _autreFraction.Denominateur) == Calcul(this.Numerateur, this.Denominateur))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        private int GetPgcd()
        {
            int a = this.numerateur;
            int b = this.denominateur;
            int pgcd = 1;

            if(a!=0 && b!=0)
            {
                if(a < 0)
                {
                    a = -a;
                }
                if(b < 0)
                {
                    b = -b;
                }
                while (a != b)
                {
                    if(a < b)
                    {
                        b = b - a;
                    }
                    else
                    {
                        a = a - b;
                    }
                }

                pgcd = a;
            }
            return pgcd;
        }

        public Fraction Reduire()
        {
            (Numerateur, Denominateur) = (Numerateur / this.GetPgcd(), Denominateur / this.GetPgcd());
            return this;
        }

        public Fraction Plus(Fraction _autreFraction)
        {
            return new Fraction(_autreFraction.Numerateur * this.denominateur + _autreFraction.Denominateur * this.Numerateur,_autreFraction.Denominateur * this.denominateur ).Reduire();
        }

        public Fraction Moins(Fraction _autreFraction)
        {
            return new Fraction(_autreFraction.Numerateur * this.denominateur - _autreFraction.Denominateur * this.Numerateur, _autreFraction.Denominateur * this.denominateur).Reduire();
        }

        public Fraction Multiplie(Fraction _autreFraction)
        {
            return new Fraction(_autreFraction.Numerateur * this.numerateur, _autreFraction.Denominateur * this.denominateur).Reduire();
        }

        public Fraction Divise(Fraction _autreFraction)
        {
            return new Fraction(_autreFraction.Numerateur * this.denominateur, _autreFraction.Denominateur * this.denominateur).Reduire();
        }
    }
}
