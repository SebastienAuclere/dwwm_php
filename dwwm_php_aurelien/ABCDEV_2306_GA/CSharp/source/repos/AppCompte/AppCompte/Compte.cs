using System;
using System.Collections.Generic;
using System.Linq;
using System.Security.Cryptography.X509Certificates;
using System.Text;
using System.Threading.Tasks;

namespace AppCompte
{
    public class Compte
    {
        private double decouvert;
        private string nomProprietaire;
        private int numeroUnique;
        private double solde;
        /// <summary>
        /// propriétés
        /// </summary>
        public double Decouvert { get => decouvert; set => decouvert = value; }
        public string NomProprietaire { get => nomProprietaire;  }
        public double Solde { get => solde;  }
        public int NumeroUnique { get => numeroUnique; }

        public Compte() : this(0,1,"",0)
        {
        }
        public Compte(double _solde, int _numeroUnique, string _nomProprietaire, double _decouvert)
        {
            this.solde = _solde;
            this.numeroUnique = _numeroUnique;
            this.nomProprietaire = _nomProprietaire;
            this.Decouvert = _decouvert;
        }

        //public double GetSolde()
        //{
        //    return this.Solde;
        //}

        //public int GetNumeroUnique()
        //{
        //    return this.NumeroUnique;
        //}

        //public string GetNomProprietaire()
        //{
        //    return this.NomProprietaire;
        //}

        //public double GetDecouvert()
        //{
        //    return this.Decouvert;
        //}

        public bool Debiter(double _montant)
        {
            this.solde -= _montant;

            if(this.Solde < this.Decouvert)
            {
                return false;
            }
            else
            {
                return true;
            }
        }

        public void Crediter(double _montant)
        {
            this.solde += _montant;
        }

        public bool Transferer(double _montant, Compte _autreCompte)
        {
            if (this.Debiter(_montant) == true){
                _autreCompte.Crediter(_montant);
                return true;
            }
            else
            {
                return false;
            }
        }

        public bool EtreSuperieur(Compte _CompteAComparer)
        {
            if(_CompteAComparer.Solde > this.Solde)
            {
                return false;
            }
            else
            {
                return true;
            }
        }
    }
}
