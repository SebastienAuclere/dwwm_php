using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ClassLibraryBouteille
{
    public class Bouteille
    {
        private double capaciteMaxEnMl;
        private bool estOuverte;
        private double quantiteLiquideEnMl;

        public Bouteille() /* Constructeur par défaut */
        {
            this.capaciteMaxEnMl = 1000;
            this.estOuverte = false;
            this.quantiteLiquideEnMl = 1000;
        }

        public Bouteille(double _capaciteEnMl, bool _estOuverte, double _quantiteEnMl)
        {
            this.capaciteMaxEnMl = _capaciteEnMl;
            this.estOuverte = _estOuverte;
            this.quantiteLiquideEnMl = _quantiteEnMl;
        }

        public bool GetOuverte()
        {
            return this.estOuverte;
        }

        public double GetQuantiteEnMl()
        {
            return this.quantiteLiquideEnMl;
        }

        public double GetCapaciteEnMl()
        {
            return this.capaciteMaxEnMl;
        }
        public bool Fermer()
        {
            if (this.estOuverte == true)
            {
                this.estOuverte = false;
                return true;
            }
            else
            {
                return false;
            }
        }

        public bool Ouvrir()
        {
            if (this.estOuverte == false)
            {
                this.estOuverte = true;
                return true;
            }
            else
            {
                return false;
            }
        }
        public bool Remplir(double _quantiteLiquideEnMl)
        {
            if (this.estOuverte && this.quantiteLiquideEnMl > 0)
            {
                if (this.quantiteLiquideEnMl + _quantiteLiquideEnMl > this.capaciteMaxEnMl)
                {
                    this.quantiteLiquideEnMl = this.capaciteMaxEnMl;
                }
                else
                {
                    this.quantiteLiquideEnMl = this.quantiteLiquideEnMl + _quantiteLiquideEnMl;
                }
                return true; 
            }
            else
            {
                return false;
            }
        }
        public bool RemplirTout()
        {
            if (this.estOuverte && this.quantiteLiquideEnMl < this.capaciteMaxEnMl)
            {
                this.quantiteLiquideEnMl = this.capaciteMaxEnMl;
                return true;
            }
            else
            {
                return false;
            }
        }
        public bool Vider(double _quantiteLiquideEnMl)
        {
            if (this.estOuverte && _quantiteLiquideEnMl > 0)
            {
                if (this.quantiteLiquideEnMl - _quantiteLiquideEnMl < 0)
                {
                    this.quantiteLiquideEnMl = 0;
                }
                else
                {
                    this.quantiteLiquideEnMl = this.quantiteLiquideEnMl - _quantiteLiquideEnMl;
                }
                return true;
            }
            else
            {
                return false;
            }
        }

        public bool ViderTout()
        {
            if (this.estOuverte && this.quantiteLiquideEnMl > 0)
            {
                this.quantiteLiquideEnMl = 0;
                return true;
            }
            else
            {
                return false;
            }

        }

    }
}
